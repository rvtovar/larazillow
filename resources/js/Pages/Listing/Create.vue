<script setup>
import {useForm} from '@inertiajs/vue3'
const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: '',
  code: '',
  street: '',
  street_nr: 0,
  price: 0,
})

const create = () => form.post('/listings', form)
</script>

<template>
  <form @submit.prevent="create">
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
        <div v-if="form.errors.beds" class="error">{{ form.errors.beds }}</div>
      </div>

      <div>
        <label>Baths</label>
        <input v-model.number="form.baths" type="text" />
        <div v-if="form.errors.baths" class="error">{{ form.errors.baths }}</div>
      </div>

      <div>
        <label>Area</label>
        <input v-model.number="form.area" type="text" />
        <div v-if="form.errors.area" class="error">{{ form.errors.area }}</div>
      </div>

      <div>
        <label>City</label>
        <input v-model="form.city" type="text" />
        <div v-if="form.errors.city" class="error">{{ form.errors.city }}</div>
      </div>

      <div>
        <label>Post Code</label>
        <input v-model="form.code" type="text" />
        <div v-if="form.errors.code" class="error">{{ form.errors.code }}</div>
      </div>

      <div>
        <label>Street</label>
        <input v-model="form.street" type="text" />
        <div v-if="form.errors.street" class="error">{{ form.errors.street }}</div>
      </div>

      <div>
        <label>Street Nr</label>
        <input v-model.number="form.street_nr" type="text" />
        <div v-if="form.errors.street_nr" class="error">{{ form.errors.street_nr }}</div>
      </div>

      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
        <div v-if="form.errors.price" class="error">
          {{ form.errors.price }}
        </div>

        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </div>
  </form>
</template>

<style scoped>
label{
    margin-right: 2em;
}
div{
    padding:2px;
}
.error{
    color: red;
    font-size: 0.8em;
    margin-top: 2px;
}
</style>
