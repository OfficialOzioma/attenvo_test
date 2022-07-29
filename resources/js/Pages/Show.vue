<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
defineProps({
  result: Array,
});
</script>

<template>
  <Head :title="result['data']['first_name']" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome to {{ result["data"]["first_name"] }}
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <div class="m-5">
              <div class="text-center items-center">
                <img
                  :src="result['data']['avatar']"
                  class="rounded center"
                  alt=" avatar "
                />
                <div class="text-3xl font-bold text-gray-900 m-3">
                  Name: {{ result["data"]["first_name"] }}
                  {{ result["data"]["last_name"] }}
                </div>
                <div class="text-gray-600 m-3">
                  Email: {{ result["data"]["email"] }}
                </div>

                <button type="button" class="btn">
                  <a :href="route('list.users', 1)"> Go Back</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
