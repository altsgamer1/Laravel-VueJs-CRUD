<template>
    <div>
        <h2>Edit Entry</h2>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateEntry">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="entry.title">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
						<textarea class="form-control" v-model="entry.text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api/entries/${this.$route.params.id}`)
                .then((res) => {
                    this.entry = res.data;
                });
        },
        methods: {
            updateEntry() {
                this.axios
                    .patch(`http://localhost:8000/api/entries/${this.$route.params.id}`, this.entry)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>