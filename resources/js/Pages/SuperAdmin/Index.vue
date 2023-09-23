
<script setup>
//   import * as inertiaVue3 from '@inertiajs/inertia-vue3';
// import Layout from '@/Layouts/SuperAdmin/Layout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';


defineProps({
    tenants: {
        type: Boolean,
    },

});

</script>


<template>
    <div>
        <div class="app-content content">
            <div class="content-body">
                <Link :href="route('logout')" method="post" as="button" class="btn btn-danger card-title">
                    Logout
                    </Link>
                <!-- Striped rows start -->
                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tenants Data</h4>
                            </div>
                            <div class="card-body">
                                <!-- إضافة محتوى هنا إذا لزم الأمر -->
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>TenantName</th>
                                            <th>Domain</th>
                                            <th>key</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="tenan in tenants" :key="tenan.id">
                                            <td>{{ tenan.name }}</td>
                                            <td>{{ tenan.domain }}</td>
                                            <td>{{ tenan.ApiKey }}</td>
                                            <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                                            <td>
                                                <Link :href="route('tenant', { key: tenan.ApiKey })"
                                                    class="btn btn-primary card-title">
                                                    View Tenant Users
                                                </Link>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Striped rows end -->
            </div>
        </div>
    </div>
</template>

<style ></style>
