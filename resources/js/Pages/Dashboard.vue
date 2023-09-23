<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link} from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Welcome Page</h2>
            <Link :href="route('logout')" method="post" as="button" class="btn btn-danger card-title">
                    Logout
                    </Link>
        </template>

        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Welcome to Our Home on the Web!

                        At OrderKing, we're thrilled to have you here. Whether you've stumbled upon us by chance
                        or you're a returning visitor, we want you to know that this virtual space is your home too.

                        Our website is more than just a collection of pages and links; it's a community, a source of
                        inspiration, and a place to explore, learn, and connect. Here, you'll find a wealth of information,
                        resources, and ideas to enrich your life and expand your horizons.

                        Explore our diverse range of content, from informative articles to captivating stories, stunning
                        visuals, and interactive experiences. We've curated this space with you in mind, hoping to provide
                        something for everyone.

                        Don't hesitate to engage with us and your fellow visitors. Share your thoughts, ask questions, and
                        join the conversation in our comments section or on social media. We believe that the best
                        experiences are the ones we create together.

                        Thank you for choosing [Your Website Name] as a part of your online journey. We're excited to have
                        you with us and can't wait to see how you'll contribute to our growing community. Feel free to
                        explore, discover, and make yourself at home.

                        Welcome to your new online home!

                    Warm regards,
                    Dev.Abdelrhman</div>
            </div>
        </div>
    </div>
</AuthenticatedLayout></template>
