<template>
  <div>
    <h2>Quiz Time!</h2>
    <ul>
      <li v-for="verb in verbs" :key="verb.id">{{ verb.verb }} - {{ verb.preposition }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      verbs: []
    };
  },
  mounted() {
    axios.get('/quiz').then(response => {
      this.verbs = response.data;
    });
  }
}
</script>
