<template>
    <div>
		<div class="float-start">
			<h2>Entries List</h2>
		</div>
		<div class="float-end">
			<router-link to="/create" class="btn btn-primary btn-block">Create Entry</router-link>
		</div>
 
        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Text</th>
                <th class="text-end">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="entry in entries" :key="entry.id">
                <td>{{ entry.id }}</td>
                <td>{{ entry.title }}</td>
                <td>{{ entry.text }}</td>
                <td class="text-end">
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: entry.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteEntry(entry.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                entries: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/entries/')
                .then(response => {
                    this.entries = response.data;
                });
        },
        methods: {
            deleteEntry(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/entries/${id}`)
                    .then(response => {
                        let i = this.entries.map(data => data.id).indexOf(id);
                        this.entries.splice(i, 1)
                    });
            }
        }
    }
</script>