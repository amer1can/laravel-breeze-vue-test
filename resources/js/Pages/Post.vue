<template>
    <div class="wrapper-one flex flex-col max-w-3xl mx-auto mt-10">
        <h1 class="text-indigo-900 font-bold">{{post.title}}</h1>
        <hr class="my-3">
        <h3>{{post.description}}</h3>
        <h2 class="italic sm:text-right text-green-700">{{post.author}}</h2>
    </div>
</template>

<script>
export default {
    name: "Post",
    props: {
        post: Object
    }
}
</script>

<style scoped>

</style>
