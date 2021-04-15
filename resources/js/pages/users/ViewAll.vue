<template>
<div>
    <div class="pageheader">
        <h2>Add New User</h2>
    </div>
    <div class="pagecontent">
         <data-table
    :columns="columns"
    url="http://example.test/example">
</data-table>      
    </div>
</div>
</template>

<script>
import {createusers}  from '../../api';
export default {
name: 'ViewAll',
 data() {
    return{
        columns: [{
                        label: 'id',
                        field: 'id'
                    },
                    {
                        label: 'title',
                        field: 'title'
                    },
                    {
                        label: 'category',
                        field: 'category'
                    },
                    {
                        label: 'description',
                        field: 'description'
                    }
                ],
                rows: [],
                page: 1,
                filter:  '',
                perPage: 12, 
    }
  },
 methods: {
        async create(e){

          if (!this.form.name) {
            this.errors.push('Name required.');
          }
          if (!this.form.email) {
            this.errors.push('Email required.');
          }

          if(this.errors.length){
            return false;
          }

            this.showloader = true;
            const { data } = createusers(this.form);
            console.log(data);
        }
    },     
}
</script>

<style scoped>

</style>    