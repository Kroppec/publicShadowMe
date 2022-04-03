<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Atskaite" />

    <BreezeAuthenticatedLayout>
      <form @submit.prevent="submit" v-if="!showForm()">
        <div style="height: calc(100vh - 65px)" class="w-screen flex flex-col">
            <div id="content" class="lg:w-10/12 w-full max-w-6xl bg-form-gray flex-1 m-auto lg:p-14 md:p-12 p-4 flex flex-col shadow-md">
              <div id="form-container" class="w-full relative flex-1 set-height bg-base-gray my-5 overflow-y-auto rounded-md">
                <div id="form" class="absolute w-full h-full md:p-4 lg:p-6 shadow-inner shadow-lg">
                  <!-- Here the user inputs basic information -->
                  <div id="question-container" class="w-full flex relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
                    <div id="question-shell" class="w-full p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">Ievads</h3>
                      <div id="question-block" class="w-full p-2 md:-3 lg:p-4 bg-shell-block rounded-md">
                        <h4 id="block-heading" class="text-md font-bold my-1">Mans Ēnu dienas mērķis</h4>
                        <div id="block-shell" class="w-full flex flex-col items-center md:flex-row lg:flex-row p-2 md:p-3 lg:p-4">
                          <h5 id="block-description" class="mx-2 my-1 text-sm md:text-md">Iepazīt</h5>
                          <input id="block-profession-input" v-model="form.profession" class="mx-2 my-1 text-input h-7 max-h-7 text-center" placeholder="profesijas/amata">
                          <h5 id="block-description" class="mx-2 my-1 text-sm md:text-md">pārstāvja darba ikdienu,</h5>
                          <input id="block-business-input" v-model="form.organisation" class="mx-2 my-1 text-input h-7 max-h-7 text-center" placeholder="uzņēmumā/iestādē">
                        </div>
                        <h4 id="block-heading" class="text-md font-bold my-1">Mani 3 svarīgākie uzdevumi ēnu dienā</h4>
                        <div id="block-shell" class="w-full flex flex-col p-2 md:p-3 lg:p-4">
                          <div id="input-shell" class="flex flex-row">
                            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">1)</h5>
                            <input id="block-task-input" v-model="form.task_1" class="my-1 w-full text-input h-7 max-h-7 px-4">
                          </div>
                          <div id="input-shell" class="flex flex-row">
                            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">2)</h5>
                            <input id="block-task-input" v-model="form.task_2" class="my-1 w-full text-input h-7 max-h-7 px-4">
                          </div>
                          <div id="input-shell" class="flex flex-row">
                            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">3)</h5>
                            <input id="block-task-input" v-model="form.task_3" class="my-1 w-full text-input h-7 max-h-7 px-4">
                          </div>
                        </div>
                        <h4 id="block-heading" class="text-md font-bold my-1">Mani 3 visbūtiskākie darbības soļi pēc ēnu dienas</h4>
                        <div id="block-shell" class="w-full flex flex-col p-2 md:p-3 lg:p-4">
                          <div id="input-shell" class="flex flex-row">
                            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">1)</h5>
                            <input id="block-task-input" v-model="form.step_1" class="my-1 w-full text-input h-7 max-h-7 px-4">
                          </div>
                          <div id="input-shell" class="flex flex-row">
                            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">2)</h5>
                            <input id="block-task-input" v-model="form.step_2" class="my-1 w-full text-input h-7 max-h-7 px-4">
                          </div>
                          <div id="input-shell" class="flex flex-row">
                            <h5 id="block-task-identifier" class="mx-2 my-1 text-neutral-accent">3)</h5>
                            <input id="block-task-input" v-model="form.step_3" class="my-1 w-full text-input h-7 max-h-7 px-4">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Here comes all of the gradeable questions from file -->
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
                                  <input id="grade-checkbox" v-model="form.radio_1" type="radio" name="grade_1" value="1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">2</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_1" type="radio" name="grade_1" value="2" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">3</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_1" type="radio" name="grade_1" value="3" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">4</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_1" type="radio" name="grade_1" value="4" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">5</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_1" type="radio" name="grade_1" value="5" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
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
                        <textarea id="block-comment-input"  v-model="form.comment_1" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
                      </div>
                    </div>
                  </div>
                  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
                    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">2. Jautājums</h3>
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
                                  <input id="grade-checkbox" v-model="form.radio_2" type="radio" name="grade_2" value="1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">2</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_2" type="radio" name="grade_2" value="2" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">3</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_2" type="radio" name="grade_2" value="3" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">4</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_2" type="radio" name="grade_2" value="4" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">5</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_2" type="radio" name="grade_2" value="5" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
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
                        <textarea id="block-comment-input"  v-model="form.comment_2" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
                      </div>
                    </div>
                  </div>
                  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
                    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">3. Jautājums</h3>
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
                                  <input id="grade-checkbox" v-model="form.radio_3" type="radio" name="grade_3" value="1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">2</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_3" type="radio" name="grade_3" value="2" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">3</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_3" type="radio" name="grade_3" value="3" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">4</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_3" type="radio" name="grade_3" value="4" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">5</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_3" type="radio" name="grade_3" value="5" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
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
                        <textarea id="block-comment-input"  v-model="form.comment_3" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
                      </div>
                    </div>
                  </div>
                  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
                    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">4. Jautājums</h3>
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
                                  <input id="grade-checkbox" v-model="form.radio_4" type="radio" name="grade_4" value="1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">2</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_4" type="radio" name="grade_4" value="2" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">3</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_4" type="radio" name="grade_4" value="3" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">4</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_4" type="radio" name="grade_4" value="4" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">5</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_4" type="radio" name="grade_4" value="5" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
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
                        <textarea id="block-comment-input"  v-model="form.comment_4" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
                      </div>
                    </div>
                  </div><div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
                    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">5. Jautājums</h3>
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
                                  <input id="grade-checkbox" v-model="form.radio_5" type="radio" name="grade_5" value="1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">2</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_5" type="radio" name="grade_5" value="2" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">3</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_5" type="radio" name="grade_5" value="3" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">4</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_5" type="radio" name="grade_5" value="4" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">5</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_5" type="radio" name="grade_5" value="5" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
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
                        <textarea id="block-comment-input" v-model="form.comment_5" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
                      </div>
                    </div>
                  </div>
                  <div id="question-container" class="w-full flex flex-col md:flex-row lg:flex-row relative p-3 md:p-4 lg:p-5 sm:border-none border-b border-neutral-accent">
                    <div id="question-shell" class="w-full flex flex-col md:w-1/2 lg:w-1/2 p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">6. Jautājums</h3>
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
                                  <input id="grade-checkbox" v-model="form.radio_6" type="radio" name="grade_6" value="1" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">2</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_6" type="radio" name="grade_6" value="2" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">3</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_6" type="radio" name="grade_6" value="3" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"/>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">4</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_6" type="radio" name="grade_6" value="4" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
                                  <span id="grade-custom" class="absolute top-1/2 left-1/2 w-0 h-0 duration-200 bg-base-blue"></span>
                                </label>
                              </div>
                              <div id="grade" class="flex flex-col items-center w-8">
                                <h6 id="grade-description" class="font-bold text-md">5</h6>
                                <label id="grade-shell" class="relative w-6 h-6 border-2 bg-shell-block border-base-blue rounded-md">
                                  <input id="grade-checkbox" v-model="form.radio_6" type="radio" name="grade_6" value="5" class="w-full h-full align-top opacity-0 cursor-pointer bg-shell-block">
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
                        <textarea id="block-comment-input" v-model="form.comment_6" class="my-1 w-full text-area" placeholder="Vērtējuma paskaidrojums..."/>
                      </div>
                    </div>
                  </div>

                  <!-- Here comes the choice-made-by-user question -->
                  <div id="question-container" class="w-full flex relative p-3 md:p-4 lg:p-5">
                    <div id="question-shell" class="w-full p-2">
                      <h3 id="question-heading" class="text-base md:text-lg lg:text-lg font-extrabold my-1">Analīze</h3>
                      <div id="question-block" class="w-full p-2 md:-3 lg:p-4 bg-shell-block">
                        <div id="block-shell" class="flex flex-col items-center">
                          <h5 id="block-heading" class="text-center text-sm md:text-md">Vai vēlies kļūt par profesionāli šajā nozarē?</h5>
                          <div id="block-container" class="flex flex-col sm:flex-row mb-4">
                            <div id="block" class="flex w-44 ">
                              <label @click="choice=1" id="choice-shell" class="cursor-pointer relative w-full h-8 bg-input-block rounded-md">
                                <input id="choice-checkbox" type="radio" checked="checked" name="choice" class="w-full h-full align-top rounded opacity-0">
                                <span id="choice-custom" class="absolute bg-base-blue w-0 duration-200 h-0 top-1/2 left-1/2"/>
                                <h6 id="choice-heading" class="absolute top-1 w-full text-center left-0 font-bold">Vēlos</h6>
                              </label>
                            </div>
                            <div id="block" class="flex w-44">
                              <label @click="choice=0" id="choice-shell" class="cursor-pointer relative w-full h-8 bg-input-block rounded-md">
                                <input id="choice-checkbox" type="radio" name="choice" class="w-full h-full align-top rounded opacity-0">
                                <span id="choice-custom" class="absolute bg-base-blue w-0 duration-200 h-0 top-1/2 left-1/2"/>
                                <h6 id="choice-heading" class="absolute top-1 w-full text-center left-0 font-bold">Nezinu</h6>
                              </label>
                            </div>
                            <div id="block" class="flex w-44">
                              <label @click="choice=-1" id="choice-shell" class="cursor-pointer relative w-full h-8 bg-input-block rounded-md">
                                <input id="choice-checkbox" type="radio" name="choice" class="w-full h-full align-top rounded opacity-0">
                                <span id="choice-custom" class="absolute bg-base-blue w-0 duration-200 h-0 top-1/2 left-1/2"/>
                                <h6 id="choice-heading" class="absolute top-1 w-full text-center left-0 font-bold">Nevēlos</h6>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div id="block-shell" class="flex flex-col md:flex-row p-2 md:p-3 lg:p-4">
                          <div id="sub-block" class="flex flex-col md:w-1/2">
                            <h6 id="block-heading" class="text-lg font-bold my-1">Ieteicamie analīzes punkti</h6>
                            <li id="information-point" v-if="choice==1" class="text-sm md:text-md font-regular positive">Kad izvēlēts 'Vēlos'?</li>
                            <li id="information-point" v-if="choice==0" class="text-sm md:text-md font-regular neutral">Kad izvēlēts 'Nezinu'?</li>
                            <li id="information-point" v-if="choice==-1" class="text-sm md:text-md font-regular negative">Kad izvēlēts 'Nevēlos'?</li>
                          </div>
                          <div id="sub-block" class="flex flex-col md:w-1/2">
                            <h6 id="block-heading" class="text-lg font-bold my-1">Veido analīzi</h6>
                            <p id="block-description" class="text-sm md:text-md font-regular">Sastādi dienas raksturojumu, iekļaujot ieteicamos punktus un citus sev nozīmīgus faktus.</p>
                            <textarea id="analysis-input" v-model="form.analysis" class="text-area" placeholder="Pieredzes raksturojums..."/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="form-controller" class="w-full flex flex-row justify-center items-center">
                <button @click="form.submitted=1" id="form-submit" class="w-44 mx-3 font-bold bg-school-red p-2 text-form-gray">Iesniegt</button>
                <button @click="form.submitted=0" id="form-save" class="w-44 mx-3 font-bold bg-base-blue p-2 text-form-gray">Saglabāt</button>
              </div>
            </div>
        </div>
      </form>
      <div id="complete-message" style="height: calc(100vh - 125px); line-height: 20px" class="w-full flex" v-if="showForm()">
        <div id="message" class="m-auto bg-white rounded-xl p-4 border-b-4 border-school-red"><h7 class="font-semibold text-lg">Ēnu dienas atskaite jau iesniegta!</h7></div>
      </div>
      <footer id="footer" class="w-screen h-10 bg-footer absolute bottom-0" />
    </BreezeAuthenticatedLayout>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";

import EntryQuestion from '../Components/FormQuestions/EntryQuestion.vue';
import GradeQuestion from '../Components/FormQuestions/GradeQuestion.vue';
import ChoicePad from '../Components/FormQuestions/ChoicePad.vue';

export default {
  name: 'Form',
  props: {
    data: Object,
  },
  data(){
    return{
      form:{
        profession:'',
        organisation:'',
        task_1:'',
        task_2:'',
        task_3:'',
        step_1:'',
        step_2:'',
        step_3:'',
        radio_1:'',
        comment_1:'',
        radio_2:'',
        comment_2:'',
        radio_3:'',
        comment_3:'',
        radio_4:'',
        comment_4:'',
        radio_5:'',
        comment_5:'',
        radio_6:'',
        comment_6:'',
        analysis:'',
        submitted: ''
      },
      choice: 1,
    }
  },
  methods:{
    submit(){
      Inertia.post('/submitForm', this.form, {
        preserveState: true,
        onSuccess: () => {
          alert('Form submitted succesfully!');
        }
      })
    },
    showForm(){
      if(this.data.length > 0){
        return this.data[0].submitted
      } else {return false}
    },
  },
  mounted(){
    if(this.data.length>0){
      this.form.analysis = this.data[0].analysis
    }
  },
  components: {
    EntryQuestion,
    GradeQuestion,
    ChoicePad,
  },
};
</script>
