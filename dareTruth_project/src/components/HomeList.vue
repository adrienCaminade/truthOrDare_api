<!-- HomeList.vue -->
<template>
  <v-container>
    <v-row>
      <v-col v-for="(modelName, index) in modelNames" :key="index" cols="12">
        <v-card>
          <v-card-title>{{ modelName }}</v-card-title>
          <!-- Ajoute ici des boutons ou des liens pour les opérations CRUD -->
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      modelNames: [],
    };
  },
  mounted() {
    // Récupère les noms des modèles depuis une source (API, Laravel, etc.)
    // Puis les assigne à modelNames
    // Exemple d'utilisation avec les données de Laravel :
    this.modelNames = @json($modelNames);
  },
};
</script>
