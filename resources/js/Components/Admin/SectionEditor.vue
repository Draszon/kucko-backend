<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps({
  items: Array,
  title: String,
  routePrefix: String,
  fields: Array,
  canAdd: { type: Boolean, default: false },
  canDelete: { type: Boolean, default: false },
});

const editingId = ref(null);
const showAddForm = ref(false);

// Image preview tracking
const addImagePreviews = ref({});
const editImagePreviews = ref({});

// Check if any field is image type (for display thumbnail)
const imageFieldKey = computed(() => props.fields.find(f => f.type === 'image')?.key);

// First non-image field for primary text display
const primaryTextField = computed(() => props.fields.find(f => f.type !== 'image' && f.type !== 'boolean' && f.type !== 'number'));
// Second non-image field for secondary text display
const secondaryTextField = computed(() => {
  const nonImageFields = props.fields.filter(f => f.type !== 'image' && f.type !== 'boolean' && f.type !== 'number');
  return nonImageFields.length > 1 ? nonImageFields[1] : null;
});

const imageUrl = (path) => {
  if (!path) return null;
  // Already an absolute path (e.g. /images/profilkep.webp) — use as-is
  if (path.startsWith('/')) return path;
  // Uploaded via storage (e.g. images/team/abc.jpg) — prepend /storage/
  return '/storage/' + path;
};

const buildDefaults = () => {
  const defaults = {};
  props.fields.forEach(f => {
    if (f.type === 'boolean') defaults[f.key] = true;
    else if (f.type === 'number') defaults[f.key] = 0;
    else if (f.type === 'array') defaults[f.key] = [];
    else if (f.type === 'image') defaults[f.key] = null;
    else defaults[f.key] = '';
  });
  return defaults;
};

const addForm = useForm(buildDefaults());

const editForms = ref({});

const startEdit = (item) => {
  editingId.value = item.id;
  const data = {};
  props.fields.forEach(f => {
    if (f.type === 'image') {
      data[f.key] = null;
    } else {
      data[f.key] = item[f.key] ?? (f.type === 'boolean' ? false : f.type === 'number' ? 0 : f.type === 'array' ? [] : '');
    }
  });
  editForms.value[item.id] = useForm(data);
  editImagePreviews.value[item.id] = {};
};

const cancelEdit = () => {
  editingId.value = null;
};

const saveEdit = (item) => {
  editForms.value[item.id].put(route(props.routePrefix + '.update', item.id), {
    preserveScroll: true,
    forceFormData: true,
    onSuccess: () => {
      editingId.value = null;
      delete editImagePreviews.value[item.id];
    },
  });
};

const submitAdd = () => {
  addForm.post(route(props.routePrefix + '.store'), {
    preserveScroll: true,
    forceFormData: true,
    onSuccess: () => {
      showAddForm.value = false;
      addForm.reset();
      Object.assign(addForm, buildDefaults());
      addImagePreviews.value = {};
    },
  });
};

const deleteItem = (item) => {
  if (confirm('Biztosan törölni szeretnéd?')) {
    useForm({}).delete(route(props.routePrefix + '.destroy', item.id), {
      preserveScroll: true,
    });
  }
};

const getFieldLabel = (field) => field.label || field.key;

// File change handlers
const handleAddFileChange = (field, event) => {
  const file = event.target.files[0];
  addForm[field.key] = file || null;
  if (file) {
    addImagePreviews.value[field.key] = URL.createObjectURL(file);
  } else {
    delete addImagePreviews.value[field.key];
  }
};

const removeAddPreview = (field) => {
  addForm[field.key] = null;
  delete addImagePreviews.value[field.key];
};

const handleEditFileChange = (itemId, field, event) => {
  const file = event.target.files[0];
  editForms.value[itemId][field.key] = file || null;
  if (!editImagePreviews.value[itemId]) {
    editImagePreviews.value[itemId] = {};
  }
  if (file) {
    editImagePreviews.value[itemId][field.key] = URL.createObjectURL(file);
  } else {
    delete editImagePreviews.value[itemId]?.[field.key];
  }
};

const removeEditPreview = (itemId, field) => {
  editForms.value[itemId][field.key] = null;
  if (editImagePreviews.value[itemId]) {
    delete editImagePreviews.value[itemId][field.key];
  }
};

// CSS osztály input error állapothoz
const inputClass = (hasError) => [
  'rounded-lg shadow-sm text-sm',
  hasError
    ? 'border-red-300 focus:ring-red-500 focus:border-red-500 bg-red-50'
    : 'border-gray-300 focus:ring-primary-500 focus:border-primary-500',
];

const inputClassFull = (hasError) => [
  ...inputClass(hasError),
  'block w-full',
];

const inputClassSmall = (hasError) => [
  ...inputClass(hasError),
  'w-32',
];
</script>

<template>
  <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 flex items-center justify-between">
      <h3 class="text-lg font-semibold text-gray-800">{{ title }}</h3>
      <button
        v-if="canAdd"
        @click="showAddForm = !showAddForm"
        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors"
      >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Új hozzáadása
      </button>
    </div>

    <!-- Új elem form -->
    <div v-if="showAddForm" class="p-6 bg-green-50 border-b border-green-200">
      <h4 class="font-semibold text-green-800 mb-4">Új elem hozzáadása</h4>
      <form @submit.prevent="submitAdd" class="space-y-4">
        <div v-for="field in fields" :key="field.key">
          <!-- Image upload (add) -->
          <div v-if="field.type === 'image'" class="space-y-1.5">
            <label class="text-sm font-medium text-gray-700">
              {{ getFieldLabel(field) }}
              <span v-if="field.required" class="text-red-500 ml-0.5">*</span>
            </label>
            <div
              :class="[
                'relative rounded-lg border-2 border-dashed p-4 text-center transition-colors',
                addForm.errors[field.key] ? 'border-red-300 bg-red-50' : 'border-gray-300 hover:border-primary-400 bg-white'
              ]"
            >
              <!-- Preview -->
              <div v-if="addImagePreviews[field.key]" class="mb-3 flex justify-center">
                <div class="relative inline-block">
                  <img
                    :src="addImagePreviews[field.key]"
                    alt="Előnézet"
                    class="h-32 max-w-full object-contain rounded-lg border border-gray-200 shadow-sm"
                  />
                  <button
                    type="button"
                    @click="removeAddPreview(field)"
                    class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 shadow-sm transition-colors"
                    title="Eltávolítás"
                  >
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Upload area -->
              <div v-else class="py-2">
                <svg class="mx-auto w-8 h-8 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-sm text-gray-500">Kép kiválasztása</p>
              </div>

              <input
                type="file"
                accept="image/jpeg,image/png,image/webp,image/gif"
                @change="handleAddFileChange(field, $event)"
                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
              />
            </div>
            <p class="text-xs text-gray-400">JPG, PNG, WebP vagy GIF (max. 5 MB)</p>
            <p v-if="addForm.errors[field.key]" class="text-red-600 text-xs flex items-center gap-1">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
              </svg>
              {{ addForm.errors[field.key] }}
            </p>
          </div>

          <!-- All other field types -->
          <div v-else class="flex flex-col gap-1">
            <label v-if="field.type !== 'boolean'" class="text-sm font-medium text-gray-700">
              {{ getFieldLabel(field) }}
              <span v-if="field.required" class="text-red-500 ml-0.5">*</span>
            </label>

            <input
              v-if="field.type === 'text'"
              v-model="addForm[field.key]"
              type="text"
              :required="field.required"
              :maxlength="field.maxLength || 255"
              :placeholder="field.placeholder"
              :class="inputClassFull(addForm.errors[field.key])"
            />
            <input
              v-else-if="field.type === 'url'"
              v-model="addForm[field.key]"
              type="url"
              :required="field.required"
              :maxlength="field.maxLength || 500"
              :placeholder="field.placeholder || 'https://'"
              :class="inputClassFull(addForm.errors[field.key])"
            />
            <textarea
              v-else-if="field.type === 'textarea'"
              v-model="addForm[field.key]"
              rows="3"
              :required="field.required"
              :maxlength="field.maxLength || 5000"
              :class="inputClassFull(addForm.errors[field.key])"
            />
            <input
              v-else-if="field.type === 'number'"
              v-model.number="addForm[field.key]"
              type="number"
              :required="field.required"
              :min="field.min ?? 0"
              :max="field.max ?? 999"
              :class="inputClassSmall(addForm.errors[field.key])"
            />
            <label v-else-if="field.type === 'boolean'" class="flex items-center gap-2">
              <input
                v-model="addForm[field.key]"
                type="checkbox"
                class="rounded text-primary-600 focus:ring-primary-500"
              />
              <span class="text-sm text-gray-600">{{ getFieldLabel(field) }}</span>
            </label>
            <select
              v-else-if="field.type === 'select'"
              v-model="addForm[field.key]"
              :required="field.required"
              :class="inputClassFull(addForm.errors[field.key])"
            >
              <option value="" disabled>— Válassz —</option>
              <option v-for="opt in field.options" :key="opt.value" :value="opt.value">{{ opt.label }}</option>
            </select>

            <p v-if="addForm.errors[field.key]" class="text-red-600 text-xs mt-0.5 flex items-center gap-1">
              <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
              </svg>
              {{ addForm.errors[field.key] }}
            </p>
          </div>
        </div>

        <div class="flex gap-2 pt-2">
          <button type="submit" :disabled="addForm.processing" class="px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 disabled:opacity-50 transition-colors">
            <span v-if="addForm.processing">Mentés...</span>
            <span v-else>Mentés</span>
          </button>
          <button type="button" @click="showAddForm = false" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-300 transition-colors">
            Mégse
          </button>
        </div>
      </form>
    </div>

    <!-- Elemek listája -->
    <div class="divide-y divide-gray-100">
      <div v-for="item in items" :key="item.id" class="p-4 hover:bg-gray-50 transition-colors">
        <!-- Megjelenítési mód -->
        <div v-if="editingId !== item.id" class="flex items-center justify-between gap-4">
          <div class="flex-1 min-w-0 flex items-center gap-3">
            <!-- Image thumbnail -->
            <img
              v-if="imageFieldKey && item[imageFieldKey]"
              :src="imageUrl(item[imageFieldKey])"
              :alt="item.title || item.name || ''"
              class="w-10 h-10 object-cover rounded-lg flex-shrink-0 border border-gray-200"
            />
            <div class="min-w-0">
              <div class="flex items-center gap-3 flex-wrap">
                <span
                  :class="[
                    'inline-block w-2 h-2 rounded-full flex-shrink-0',
                    item.is_active !== undefined ? (item.is_active ? 'bg-green-500' : 'bg-gray-300') : 'bg-blue-500'
                  ]"
                ></span>
                <span class="font-medium text-gray-800 text-sm truncate">
                  {{ item[primaryTextField?.key] || item.title || item.name || item.label || item.key || '—' }}
                </span>
                <span v-if="item.sort_order !== undefined" class="text-xs text-gray-400 flex-shrink-0">#{{ item.sort_order }}</span>
              </div>
              <p v-if="secondaryTextField && item[secondaryTextField.key]" class="text-gray-500 text-xs mt-1 truncate">
                {{ String(item[secondaryTextField.key]).substring(0, 100) }}{{ String(item[secondaryTextField.key]).length > 100 ? '...' : '' }}
              </p>
            </div>
          </div>
          <div class="flex items-center gap-2 flex-shrink-0">
            <button
              @click="startEdit(item)"
              class="p-1.5 text-gray-400 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors"
              title="Szerkesztés"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
            </button>
            <button
              v-if="canDelete"
              @click="deleteItem(item)"
              class="p-1.5 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors"
              title="Törlés"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Szerkesztési mód -->
        <div v-else>
          <form @submit.prevent="saveEdit(item)" class="space-y-4">
            <div v-for="field in fields" :key="field.key">
              <!-- Image upload (edit) -->
              <div v-if="field.type === 'image'" class="space-y-1.5">
                <label class="text-sm font-medium text-gray-700">
                  {{ getFieldLabel(field) }}
                  <span v-if="field.required" class="text-red-500 ml-0.5">*</span>
                </label>
                <div
                  :class="[
                    'relative rounded-lg border-2 border-dashed p-4 text-center transition-colors',
                    editForms[item.id]?.errors?.[field.key] ? 'border-red-300 bg-red-50' : 'border-gray-300 hover:border-primary-400 bg-gray-50'
                  ]"
                >
                  <!-- New image preview -->
                  <div v-if="editImagePreviews[item.id]?.[field.key]" class="mb-3 flex justify-center">
                    <div class="relative inline-block">
                      <img
                        :src="editImagePreviews[item.id][field.key]"
                        alt="Új kép előnézet"
                        class="h-32 max-w-full object-contain rounded-lg border border-primary-300 shadow-sm"
                      />
                      <button
                        type="button"
                        @click="removeEditPreview(item.id, field)"
                        class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 shadow-sm transition-colors"
                        title="Eltávolítás"
                      >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                      <span class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-primary-600 text-white text-[10px] font-medium px-2 py-0.5 rounded-full">Új kép</span>
                    </div>
                  </div>

                  <!-- Current image (only when no new preview) -->
                  <div v-else-if="item[field.key]" class="mb-3 flex justify-center">
                    <div class="relative inline-block">
                      <img
                        :src="imageUrl(item[field.key])"
                        alt="Jelenlegi kép"
                        class="h-32 max-w-full object-contain rounded-lg border border-gray-200 shadow-sm"
                      />
                      <span class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gray-500 text-white text-[10px] font-medium px-2 py-0.5 rounded-full whitespace-nowrap">Jelenlegi kép</span>
                    </div>
                  </div>

                  <!-- Upload prompt -->
                  <div v-else class="py-2">
                    <svg class="mx-auto w-8 h-8 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-sm text-gray-500">Kép kiválasztása</p>
                  </div>

                  <input
                    type="file"
                    accept="image/jpeg,image/png,image/webp,image/gif"
                    @change="handleEditFileChange(item.id, field, $event)"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                  />
                </div>
                <p class="text-xs text-gray-400">JPG, PNG, WebP vagy GIF (max. 5 MB). Ha nem választasz új képet, a jelenlegi marad.</p>
                <p v-if="editForms[item.id]?.errors?.[field.key]" class="text-red-600 text-xs flex items-center gap-1">
                  <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                  </svg>
                  {{ editForms[item.id].errors[field.key] }}
                </p>
              </div>

              <!-- All other field types -->
              <div v-else class="flex flex-col gap-1">
                <label v-if="field.type !== 'boolean'" class="text-sm font-medium text-gray-700">
                  {{ getFieldLabel(field) }}
                  <span v-if="field.required" class="text-red-500 ml-0.5">*</span>
                </label>

                <input
                  v-if="field.type === 'text'"
                  v-model="editForms[item.id][field.key]"
                  type="text"
                  :required="field.required"
                  :maxlength="field.maxLength || 255"
                  :placeholder="field.placeholder"
                  :class="inputClassFull(editForms[item.id]?.errors?.[field.key])"
                />
                <input
                  v-else-if="field.type === 'url'"
                  v-model="editForms[item.id][field.key]"
                  type="url"
                  :required="field.required"
                  :maxlength="field.maxLength || 500"
                  :placeholder="field.placeholder || 'https://'"
                  :class="inputClassFull(editForms[item.id]?.errors?.[field.key])"
                />
                <textarea
                  v-else-if="field.type === 'textarea'"
                  v-model="editForms[item.id][field.key]"
                  rows="3"
                  :required="field.required"
                  :maxlength="field.maxLength || 5000"
                  :class="inputClassFull(editForms[item.id]?.errors?.[field.key])"
                />
                <input
                  v-else-if="field.type === 'number'"
                  v-model.number="editForms[item.id][field.key]"
                  type="number"
                  :required="field.required"
                  :min="field.min ?? 0"
                  :max="field.max ?? 999"
                  :class="inputClassSmall(editForms[item.id]?.errors?.[field.key])"
                />
                <label v-else-if="field.type === 'boolean'" class="flex items-center gap-2">
                  <input
                    v-model="editForms[item.id][field.key]"
                    type="checkbox"
                    class="rounded text-primary-600 focus:ring-primary-500"
                  />
                  <span class="text-sm text-gray-600">{{ getFieldLabel(field) }}</span>
                </label>
                <select
                  v-else-if="field.type === 'select'"
                  v-model="editForms[item.id][field.key]"
                  :required="field.required"
                  :class="inputClassFull(editForms[item.id]?.errors?.[field.key])"
                >
                  <option value="" disabled>— Válassz —</option>
                  <option v-for="opt in field.options" :key="opt.value" :value="opt.value">{{ opt.label }}</option>
                </select>

                <p v-if="editForms[item.id]?.errors?.[field.key]" class="text-red-600 text-xs mt-0.5 flex items-center gap-1">
                  <svg class="w-3.5 h-3.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                  </svg>
                  {{ editForms[item.id].errors[field.key] }}
                </p>
              </div>
            </div>

            <div class="flex gap-2 pt-2">
              <button type="submit" :disabled="editForms[item.id]?.processing" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 disabled:opacity-50 transition-colors">
                <span v-if="editForms[item.id]?.processing">Mentés...</span>
                <span v-else>Mentés</span>
              </button>
              <button type="button" @click="cancelEdit()" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-300 transition-colors">
                Mégse
              </button>
            </div>
          </form>
        </div>
      </div>

      <div v-if="!items?.length" class="p-6 text-center text-gray-400 text-sm">
        Nincsenek elemek.
      </div>
    </div>
  </div>
</template>
