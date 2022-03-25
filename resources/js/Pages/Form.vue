
<template>
<form>
  <div class="w-screen h-screen flex flex-col">
      <div id="content" class="lg:w-10/12 w-full max-w-6xl bg-form-gray flex-1 m-auto lg:p-14 md:p-12 p-4 flex flex-col shadow-md">
        <h1 id="content-title" class="text-2xl md:text-4xl lg:text-5xl font-bold">Ēnu dienas atskaite</h1>
        <h2 id="content=description" class="text-lg md:text-xl lg:text-2xl font-semibold text-base-blue">Vārds Uzvārds - Iestādes nosaukums - Klase</h2>
        <div id="form-container" class="w-full relative flex-1 set-height bg-base-gray my-5 overflow-y-auto rounded-md">
          <div id="form" class="absolute w-full h-full md:p-4 lg:p-6 shadow-inner shadow-lg">
            <!-- Here the user inputs basic information -->
            <EntryQuestion />

            <!-- Here comes all of the gradeable questions from file -->
            <GradeQuestion />

            <!-- Here comes the choice-made-by-user question -->
            <ChoicePad />
          </div>
        </div>
        <div id="form-controller" class="w-full flex flex-row justify-center items-center">
          <button id="form-submit" class="w-44 mx-3 font-bold bg-color-accent p-2 text-form-gray">Iesniegt</button>
          <button id="form-save" class="w-44 mx-3 font-bold bg-base-blue p-2 text-form-gray">Saglabāt</button>
        </div>
      </div>
    <footer id="footer" class="w-screen h-10 bg-footer" />
  </div>
</form>
</template>

<script>

import EntryQuestion from '../Components/FormQuestions/EntryQuestion.vue'
import GradeQuestion from '../Components/FormQuestions/GradeQuestion.vue'
import ChoicePad from '../Components/FormQuestions/ChoicePad.vue'

export default {
  name: 'Form',
  components: {
    EntryQuestion,
    GradeQuestion,
    ChoicePad,
  },
};
</script>
