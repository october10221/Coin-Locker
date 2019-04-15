<template>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Coin Locker</h1>
            <!-- <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example 555.
                    </div>
                </div>
            </div> -->

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center"> <h3>S</h3> </th>
                            <th class="text-center"> <h3>M</h3> </th>
                            <th class="text-center"> <h3>L</h3> </th>
                        </tr>
                    </thead>
                        
                    <tbody>
                        <tr>
                            <td class="text-center"> <a href=""><img src="photo/locker1.png" width="50" height="60"></a> </td>
                            <td class="text-center"> <a href=""><img src="photo/locker2.png" width="50" height="60"></a> </td>
                            <td class="text-center"> <a href=""><img src="photo/locker3.png" width="50" height="60"></a> </td>
                        </tr>
                    </tbody>   
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

    export default {
    //     mounted() {
    //         axios.get('http://127.0.0.1:8000/api/getlocker')
    //             .then(function (response) {
    //                 console.log(response);
    //             })
    //             .catch(function (error) {
    //                 console.log(error);
    //             });
    //   }
    }
</script>

<style>
.table-responsive {
    display: table;
}

.table {
    border-radius: 5px;
    width: 50%;
    margin: 0px auto;
    float: none;
}
</style>
