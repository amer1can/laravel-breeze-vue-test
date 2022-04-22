<template>
    <div class="wrapper flex flex-col max-w-3xl mx-auto mt-10">
        <h3 class="text-indigo-600">Текущие записи:</h3>

        <div v-for="post in posts" :key="post.id" class="mt-6 border border-gray-400 p-2 rounded-md">
            <h2 class="font-semibold hover:text-red-300"><a :href="'http://127.0.0.1:8000/posts/' + post.id">{{post.title}}</a></h2>
            <h1 class="italic">{{post.author}}</h1>
        </div>
    </div>
</template>

<script>

export default {
    name: "Posts",
    props: {
        posts: Array
    },
}
</script>

<style scoped>

</style>
