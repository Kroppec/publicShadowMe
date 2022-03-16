<template>
<fBlock>
    <cQuestion />
    <gQuestion />
    <cPad />
</fBlock>
</template>

<style>
body {
  background-image: url("../../img/background.svg")
}
</style>

<script>
import fBlock from '../Components/form_block.vue'
import gQuestion from '../Components/grade_question.vue'
import cPad  from '../Components/choice_pad.vue'
import cQuestion from '../Components/content_question.vue'
export default {
  name: 'Welcome',
  components: {
    fBlock,
    cQuestion,
    gQuestion,
    cPad,
  }
};
</script>
