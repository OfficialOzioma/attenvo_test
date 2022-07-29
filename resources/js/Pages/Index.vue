<script setup>
import pagination from "laravel-vue-pagination";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
defineProps({
  results: Array,
});
</script>
<template>
  <Head title="List of Users" />
  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <h2>
              <span class="label warning m-1"
                >Page No {{ results["page"] }}</span
              >

              <span class="label success m-1"
                >Per Page {{ results["per_page"] }}</span
              >
              <span class="label info m-1">Total {{ results["total"] }}</span>
              <span class="label other"
                >Total Page {{ results["total_pages"] }}</span
              >
            </h2>
            <br />

            <table className="table-fixed w-full">
              <thead>
                <tr className="bg-gray-100">
                  <th className="px-4 py-2 w-20">No.</th>
                  <th className="px-4 py-2">email</th>
                  <th className="px-4 py-2">first_name</th>
                  <th className="px-4 py-2">last_name</th>
                  <th className="px-4 py-2">Picture</th>
                  <th className="px-4 py-2">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="result in results['data']" :key="result.id">
                  <td className="border px-4 py-2">{{ result.id }}</td>
                  <td className="border px-4 py-2">{{ result.email }}</td>
                  <td className="border px-4 py-2">{{ result.first_name }}</td>
                  <td className="border px-4 py-2">{{ result.last_name }}</td>
                  <td className="border px-4 py-2">
                    <div class="text-center">
                      <img
                        :src="result.avatar"
                        class="rounded"
                        alt="{ result.avatar }"
                      />
                    </div>
                  </td>

                  <td className="border px-4 py-2">
                    <Link
                      tabIndex="1"
                      className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                      :href="route('user.show', result.id)"
                    >
                      View this user
                    </Link>
                  </td>
                </tr>
              </tbody>
            </table>
            <div>
              <button
                class="label success m-2"
                v-for="page in results['total_pages']"
                :key="page.id"
              >
                <a :href="route('list.users', page)">Page {{ page }}</a>
                <!-- page {{ page }} -->
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>
