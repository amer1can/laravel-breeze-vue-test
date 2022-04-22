<template>
    <div class="form flex flex-col max-w-3xl mx-auto mt-6">
        <form method="post">
            <CSRFTokenInput />
            <h1 class="my-6 text-indigo-700">Create new post</h1>
            <span class="font-medium mt-2">Title:</span>
            <input type="text" class="rounded text-pink-500 p-2"
                   v-model="title"
            >

            <span class="font-medium mt-2">Description:</span>
            <input type="text" class="rounded text-pink-500 p-2"
                   v-model="desc"
            >

            <button type="submit" class="p-2 bg-pink-300 self-center mt-3 rounded-md hover:bg-pink-700"
                    @click="createPost"
            >Create</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios'
import CSRFTokenInput from "@/components/CSRFTokenInput";

export default {
    name: "CreatePost",
    components: {CSRFTokenInput},
    props: {
      currentUser: {
          type: Object,
          default: {}
      }
    },
    data: () => ({
        title: '',
        desc: ''
    }),
    methods: {
        createPost() {
            const data = {
                title: this.title,
                description: this.desc,
                author: this.currentUser.name
            }
            axios.post('http://127.0.0.1:8000/post/create', data)
        }
    }
}
</script>

<style scoped>

</style>
