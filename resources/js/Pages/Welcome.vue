<template>
  <form class="flex flex-col rounded-xl border border-blue-600 mx-48 p-8 space-y-6 mt-16" @submit.prevent="submit"> <!-- Catches form before submit CA->methods -->
    <h1 class="text-blue-600 text-center">Input fields</h1>
    <input v-model="form.input" type="text" class="border-blue-400 border rounded-xl w-full py-2 px-4"/>
    <h1 class="text-blue-600 text-center">Radio</h1>
    <div class="flex space-x-6">
      <input type="radio" v-model="form.radio" name="radio" value="0"/>
      <input type="radio" v-model="form.radio" name="radio" value="1"/>
    </div>
    <button type="submit" class="rounded-xl border border-blue-600 hover:bg-blue-600 hover:text-white text-blue-600">Submit</button>
  </form>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
  name: 'Welcome',
  data(){
    return{
      form:{
        input:'',
        radio:''
      }
    }
  },
  methods:{
    // Method call post submit
    submit(){
      Inertia.post('/testupload', this.form, {
        preserveState: false,
        onSuccess: () => {
          alert('Create success!');
        }
      })
    }
  },
};
</script>

<style>
body { margin:0; padding:0; background: none}
</style>
