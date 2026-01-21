<script setup>
import Header from '@/Components/Header.vue';
import HeroSection from '@/Components/Sections/HeroSection.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
<Head title="Főoldal" />

<!--Header menük-->
<Header />

<main class="text-black bg-bgWhite">

  <!--Hero szekció-->
  <HeroSection />

  <!--Céljaink szekció-->
  <section id="goals" class="scroll-mt-16 font-open px-2 pt-10 mb-20 flex justify-center text-dark">
    <div class="max-w-[1200px]">
      <div class="mb-10 sm:mb-20 flex flex-col sm:flex-row sm:items-center gap-5">
        <div class="flex flex-col gap-5 mb-10 sm:basis-1/2 sm:mb-0 lg:leading-loose">
          <h2 class="text-center font-patrick font-medium text-3xl md:text-4xl lg:text-5xl my-8">Tanulószobánk célja</h2>
          <p>Egy barátságos környezet kialakítása a gyerekek számára, ahol könnyebb és örömtelibb a tanulás. Nálunk nem csak leckét írnak, hanem valódi segítséget kapnak az iskolai tananyag megértéséhez és elsajátításához.</p>
          <p>Kis létszámú csoportjaink lehetővé teszik az egyéni figyelmet, így minden gyermek saját tempójában fejlődhet. A házi feladatok elkészítésén és a tananyag átismétlésén túl arra próbálunk törekedni, hogy magabiztosabbá váljanak, önállóan is tudjanak tanulni.</p>
        </div>
        <div class="flex justify-center sm:basis-1/2 shrink-0">
          <img class="rounded-md w-64 lg:w-80 shadow-lg" src="/images/irogep.webp" alt="írógép">
        </div>
      </div>

      <div class="mb-10 flex flex-col-reverse sm:flex-row sm:items-center">
        <div class="flex justify-center sm:basis-1/2 shrink-0">
          <img class="rounded-md w-64 lg:w-80 shadow-lg" src="/images/tanulas_vagott.webp" alt="írógép">
        </div>
        <div class="flex flex-col gap-5 mb-10 sm:basis-1/2 lg:leading-loose">
          <p>Nagy hangsúlyt fektetünk a szociális készségek fejlesztésére is. Számos szabadtéri játékkal foglaljuk le őket a tanulás végeztével. Programjaink során a gyerekek nem csak tudással, hanem új barátságokkal is gazdagodnak. A város különböző iskoláiba járnak, itt lehetőség van egymás megismerésére.</p>
          <p>Ha szeretné, hogy gyermeke olyan közösségben tanuljon, ahol figyelem és gondoskodás veszi körül, akkor nálunk a helye. Mi azért dolgozunk, hogy minden gyereknek sikerélménye legyen és jó jegyek legyenek a bizonyítványban.</p>
        </div>
      </div>
      <div>
        <h2 class="text-3xl md:text-4xl lg:text-5xl text-center font-patrick">Mert együtt tényleg könnyebb a tanulás!</h2>
      </div>
    </div>
  </section>

  <section class="scroll-mt-16 w-full text-dark">
    <div class="w-full mb-[-5px]">
      <img class="origin-center rotate-180" src="/images/separator.webp" alt="szeparátor hullámvonal">
    </div>
    <div class="bg-sectionBg px-2 w-full">
      <div class="text-3xl md:text-4xl lg:text-5xl font-patrick py-10">
        <h2 class="text-center">Törekvésünk, hogy a gyerekek</h2>
      </div>
      
      <div class="w-full flex justify-center py-10">
        <div class="w-full flex flex-wrap justify-around gap-10 text-lg">
          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/studying.webp" alt="tanulás logo">
            <p>Megtanuljanak tanulni</p>
          </div>

          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/help.webp" alt="segítség logo">
            <p>Merjenek kérdezni</p>
          </div>

          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/funy_to_study.webp" alt="tanulás logo">
            <p>Érezzék jól magukat tanulás közben</p>
          </div>

          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/onbizalom.webp" alt="önbizalom logo">
            <p>Ne küzdjenek az önbizalomhiánnyal, ismerjék meg saját értékeiket, képességeiket</p>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full mt-[-5px]">
      <img src="/images/separator.webp" alt="szeparátor hullámvonal">
    </div>
  </section>

  <!--Kiket várunk szekció-->
  <section id="waiting-for" class="scroll-mt-16 w-full text-dark flex justify-center py-10">
    <div class="px-2 max-w-[1200px]">
      <h2 class="text-center text-3xl md:text-4xl lg:text-5xl font-patrick pb-10">Kiket várunk?</h2>
      <div class="flex flex-col gap-5">
        <p>Tanulószobánkba általános iskola felső tagozatos tanulókat várunk, hétfőtől péntekig 13:30-tól 16:00-ig biztosítjuk a felügyeletüket. Igény szerint ettől el tudunk térni.</p>
        <p>Ez idő alatt elkészítjük az írásbeli házi feladatokat, mindenki megtanulja a szóbeli feladatokat, amit aztán ki is kérdezünk a gyerekektől. Ha szükségesnek érezzük, akkor még gyakoroljuk az anyagot. Majd bepakoljuk a tanszereket a következő napra. A könyveket és a füzeteket a tanulószobában is lehet hagyni, így mindig kéznél vannak.</p>
        <p>Ha mindezzel készen vagyunk, lazítunk, pihenünk (társasjáték, beszélgetés, testmozgás, stb.).</p>
      </div>
    </div>
  </section>

  <!--Bemutatkozás szekció-->
  <section id="who-we-are" class="scroll-mt-16 w-full text-dark flex justify-center py-10">
    <div class="sm:px-2 max-w-[1200px]">
      <h2 class="text-center text-3xl md:text-4xl lg:text-5xl font-patrick pb-10">Kik vagyunk?</h2>

      <div class="bg-gray-300/70 rounded-xl p-5 md:p-20 flex flex-col lg:flex-row">
        <div class="flex justify-center my-10 lg:mr-10">
          <img class="max-w-36 rounded-xl shadow-lg" src="/images/profilkep.webp" alt="profilkép">
        </div>
        
        <div>
          <div>
            <p class="text-xl font-semibold">Borosné Müller Tímea</p>
            <p class="text-lg font-semibold">Alapító</p>
            <div class="border-b-2 border-gray-400/80 rounded-full my-3"></div>
          </div>

          <div class="mb-5">
            <h3 class="italic font-semibold">Fontos hogy tudd, kire bízod a gyermeked, ha a Kuckó Tanulószobát választjátok!</h3>
          </div>

          <div class="flex flex-col gap-5">
            <p>Borosné Müller Tímea vagyok, a Kuckó Tanulószoba alapítója. Az Eszterházy Károly Tanárképző Főiskolán végeztem matematika-számítástechnika tanári szakon 1994-ben, majd a Debreceni Egyetem informatika kiegészítőjét végeztem el. Pályafutásomat napközis nevelőként kezdtem, majd informatikát és matematikát tanítottam általános és több középiskolában is. Harmadik fiam születése óta a családi vállalkozásunk tagja vagyok, de mindig is visszavágytam a tanításhoz.</p>
            <p>Sajnos a mai közoktatásban nem minden gyermek tudja megtanulni, begyakorolni a tananyagot. Ezen szeretnénk segíteni a Tanulószobánkban, ahol a gyerekekkel együtt elkészítjük a házi feladatot, az esetleges lemaradásokat bepótoljuk. Nem egy tantárgyból korrepetálunk, hanem szinte mindenből felkészülünk. Célunk, hogy egyedül is menjen a tanulás, több tanulási módszert is alkalmazunk. A folyamatos tanulás a jegyeken is meglátszik.</p>
            <p class="font-semibold">Ha szeretnél gyermekeddel csatlakozni hozzánk, keress bátran!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Nézz be hozzánk szekció-->
  <section>

  </section>

  <!--Áraink szekció-->
  <section id="prices" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>
  
  <section id="admission" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>

  <section id="room-rental" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>

  <section id="contacts" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>
</main>

<footer></footer>
</template>