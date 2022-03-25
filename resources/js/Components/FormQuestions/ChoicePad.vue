<template>
  <div id="question-container" class="w-full flex relative p-3 md:p-4 lg:p-5">
    <div id="question-shell" class="w-full p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">Analīze</h3>
      <div id="question-block" class="w-full p-2 md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex flex-col items-center">
          <h5 id="block-heading" class="text-center text-sm md:text-md">Vai vēlies kļūt par profesionāli šajā nozarē?</h5>
          <div id="block-container" class="flex flex-col sm:flex-row mb-4">
            <div id="block" class="flex w-44 ">
              <label id="choice-shell" class="relative w-full h-8 bg-input-block rounded-md">
                <input id="choice-checkbox" choice="positive" type="radio" name="choice" class="w-full h-full align-top cursor-pointer rounded opacity-0">
                <span id="choice-custom" class="absolute bg-base-blue w-0 duration-200 h-0 top-1/2 left-1/2"/>
                <h6 id="choice-heading" class="absolute top-1 w-full text-center left-0 font-bold">Vēlos</h6>
              </label>
            </div>
            <div id="block" class="flex w-44">
              <label id="choice-shell" class="relative w-full h-8 bg-input-block rounded-md">
                <input id="choice-checkbox" choice="neutral" type="radio" name="choice" class="w-full h-full align-top cursor-pointer rounded opacity-0">
                <span id="choice-custom" class="absolute bg-base-blue w-0 duration-200 h-0 top-1/2 left-1/2"/>
                <h6 id="choice-heading" class="absolute top-1 w-full text-center left-0 font-bold">Nezinu</h6>
              </label>
            </div>
            <div id="block" class="flex w-44">
              <label id="choice-shell" class="relative w-full h-8 bg-input-block rounded-md">
                <input id="choice-checkbox" choice="negative" type="radio" name="choice" class="w-full h-full align-top cursor-pointer rounded opacity-0">
                <span id="choice-custom" class="absolute bg-base-blue w-0 duration-200 h-0 top-1/2 left-1/2"/>
                <h6 id="choice-heading" class="absolute top-1 w-full text-center left-0 font-bold">Nevēlos</h6>
              </label>
            </div>
          </div>
        </div>
        <div id="block-shell" class="flex flex-col md:flex-row p-2 md:p-3 lg:p-4">
          <div id="sub-block" class="flex flex-col md:w-1/2">
            <h6 id="block-heading" class="text-lg font-bold my-1">Ieteicamie analīzes punkti</h6>
            <li id="information-point" class="text-sm md:text-md font-regular positive">Kad izvēlēts 'Vēlos'?</li>
            <li id="information-point" class="text-sm md:text-md font-regular neutral">Kad izvēlēts 'Nezinu'?</li>
            <li id="information-point" class="text-sm md:text-md font-regular negative">Kad izvēlēts 'Nevēlos'?</li>
          </div>
          <div id="sub-block" class="flex flex-col md:w-1/2">
            <h6 id="block-heading" class="text-lg font-bold my-1">Veido analīzi</h6>
            <p id="block-description" class="text-sm md:text-md font-regular">Sastādi dienas raksturojumu, iekļaujot ieteicamos punktus un citus sev nozīmīgus faktus.</p>
            <textarea id="analysis-input" class="text-area" placeholder="Pieredzes raksturojums..."/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ChoicePad',
};
</script>
