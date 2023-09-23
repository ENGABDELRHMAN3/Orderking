
<script setup>

import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';



defineProps({
    users: {
        type: Object,
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
                                    <Link :href="route('SuperAdmin.tenant')" class="btn btn-success card-title">
                                    Back to Dashbord
                                    </Link>
                                </div>
                                <div class="card-body">
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>User name</th>
                                                <th>User email</th>
                                                <th>Status</th>
                                                <!-- <th>Actions</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="user in users" :key="user.id">
                                                <td>{{ user.name }}</td>
                                                <td>{{ user.email }}</td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">Active</span>
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
