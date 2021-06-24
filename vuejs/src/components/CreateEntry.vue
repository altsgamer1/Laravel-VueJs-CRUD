<template>
    <div>
        <h2>Create Entry</h2>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="addEntry">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="entry.title">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
						<textarea class="form-control" v-model="entry.text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                entry: {}
            }
        },
        methods: {
            addEntry() {
                this.axios
                    .post('http://localhost:8000/api/entries', this.entry)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>