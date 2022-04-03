<template>
  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">1. Jautājums</h3>
      <div id="question-block" class="w-full p-2 flex-1 flex flex-col xl:flex-row md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex-1">
        <h5 id="block-heading" class="text-sm md:text-md">Esmu apmierināts(a) un gandarīts(a) ar savu izvēli un ieguvumiem no Ēnu dienas.</h5>
        </div>
        <div id="block-shell" class="flex-1 relative items-center">
          <div id="shell" class="flex w-full h-full items-center">
            <div id="grade-container" class="w-full flex flex-row top-1/2 justify-between">
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">1</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">2</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">3</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">4</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">5</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="question-shell" class="w-full md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-semibold my-1">Komentārs</h3>
      <div id="question-block" class="w-full flex items-center bg-shell-block">
        <textarea id="block-comment-input" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
      </div>
    </div>
  </div>
  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">1. Jautājums</h3>
      <div id="question-block" class="w-full p-2 flex-1 flex flex-col xl:flex-row md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex-1">
        <h5 id="block-heading" class="text-sm md:text-md">Ēnošana uzņēmumā/iestādē bija noorganizēta kvalitatīvi.</h5>
        </div>
        <div id="block-shell" class="flex-1 relative items-center">
          <div id="shell" class="flex w-full h-full items-center">
            <div id="grade-container" class="w-full flex flex-row top-1/2 justify-between">
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">1</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">2</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">3</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">4</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">5</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="question-shell" class="w-full md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-semibold my-1">Komentārs</h3>
      <div id="question-block" class="w-full flex items-center bg-shell-block">
        <textarea id="block-comment-input" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
      </div>
    </div>
  </div>
  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">1. Jautājums</h3>
      <div id="question-block" class="w-full p-2 flex-1 flex flex-col xl:flex-row md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex-1">
        <h5 id="block-heading" class="text-sm md:text-md">Es ieguvu pieteikami plašu informāciju par ēnojamā profesionāļa darba ikdienu, pienākumiem, nepieciešamo izglītību, izaugsmes iespējām.</h5>
        </div>
        <div id="block-shell" class="flex-1 relative items-center">
          <div id="shell" class="flex w-full h-full items-center">
            <div id="grade-container" class="w-full flex flex-row top-1/2 justify-between">
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">1</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">2</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">3</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">4</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">5</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="question-shell" class="w-full md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-semibold my-1">Komentārs</h3>
      <div id="question-block" class="w-full flex items-center bg-shell-block">
        <textarea id="block-comment-input" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
      </div>
    </div>
  </div>
  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">1. Jautājums</h3>
      <div id="question-block" class="w-full p-2 flex-1 flex flex-col xl:flex-row md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex-1">
        <h5 id="block-heading" class="text-sm md:text-md">Mana izvēle un ieguvumi no Ēnu dienas bija apmierinoši</h5>
        </div>
        <div id="block-shell" class="flex-1 relative items-center">
          <div id="shell" class="flex w-full h-full items-center">
            <div id="grade-container" class="w-full flex flex-row top-1/2 justify-between">
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">1</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">2</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">3</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">4</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">5</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="question-shell" class="w-full md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-semibold my-1">Komentārs</h3>
      <div id="question-block" class="w-full flex items-center bg-shell-block">
        <textarea id="block-comment-input" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
      </div>
    </div>
  </div><div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">1. Jautājums</h3>
      <div id="question-block" class="w-full p-2 flex-1 flex flex-col xl:flex-row md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex-1">
        <h5 id="block-heading" class="text-sm md:text-md">Ieguvu pilnīgu priekšstatu par uzņēmuma/iestādes darbības pamatprincipiem, darba organizāciju, misiju, produktiem/pakalpojumiem, strādājošo darba apstākļiem.</h5>
        </div>
        <div id="block-shell" class="flex-1 relative items-center">
          <div id="shell" class="flex w-full h-full items-center">
            <div id="grade-container" class="w-full flex flex-row top-1/2 justify-between">
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">1</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">2</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">3</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">4</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">5</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="question-shell" class="w-full md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-semibold my-1">Komentārs</h3>
      <div id="question-block" class="w-full flex items-center bg-shell-block">
        <textarea id="block-comment-input" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
      </div>
    </div>
  </div>
  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">1. Jautājums</h3>
      <div id="question-block" class="w-full p-2 flex-1 flex flex-col xl:flex-row md:-3 lg:p-4 bg-shell-block">
        <div id="block-shell" class="flex-1">
        <h5 id="block-heading" class="text-sm md:text-md">Ja būs vēl iespēja ēnot, to, noteikti, izmantošu.</h5>
        </div>
        <div id="block-shell" class="flex-1 relative items-center">
          <div id="shell" class="flex w-full h-full items-center">
            <div id="grade-container" class="w-full flex flex-row top-1/2 justify-between">
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">1</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">2</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">3</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">4</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
              <div id="grade" class="flex flex-col items-center w-8">
                <h6 id="grade-description" class="font-bold text-md">5</h6>
                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                  <input id="grade-checkbox" type="radio" name="grade_1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="question-shell" class="w-full md:w-1/2 lg:w-1/2 p-2">
      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-semibold my-1">Komentārs</h3>
      <div id="question-block" class="w-full flex items-center bg-shell-block">
        <textarea id="block-comment-input" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'GradeQuestion',
};
</script>
