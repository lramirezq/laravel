<template>
    <table class="custom-table">
      <thead>
        <tr>
          <th>ESTADO</th>
          <th>COMPONENTE</th>
          <th>LAST CHECK</th>
          <th>OBSERVACION</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in data" :key="index" :class="{'online-row': item.estado === 1, 'error-row': item.estado !== 1}">
          <td style="text-align: center;">
            <img v-if="item.estado === 1" src="img/online.png" alt="Online" width="40" style="display: block; margin: 0 auto;">
            <img v-else src="img/error.png" alt="Error" width="40" style="display: block; margin: 0 auto;">
          </td>
          <td>{{ item.componente }}</td>
          <td>{{ item.last_check }}</td>
          <td>{{ item.observacion }}</td>
        </tr>
      </tbody>
    </table>
</template>

<script>
import { ref } from "vue";

export default {
  props: {
    data: {
      type: Array,
      required: true,
    },
  },
  setup(props) {
    const data = ref(props.data);

    return {
      data
    };
  }
};
</script>

<style>
/* Estilos para la tabla */
.custom-table {
  width: 100%;
  border-collapse: collapse;
}

/* Estilos para las celdas de la tabla */
.custom-table th, .custom-table td {
  padding: 6px; /* Reducir el padding para que las celdas sean más compactas */
  text-align: left;
  border: 1px solid #ddd;
  font-size: 12px; /* Tamaño de la fuente más pequeño */
}

/* Estilos para las filas basados en el estado */
.online-row {
  background-color: #e6ffe6; /* Fondo verde si está en línea */
}

.error-row {
  background-color: #ffe6e6; /* Fondo rojo si hay un error */
}

</style>
