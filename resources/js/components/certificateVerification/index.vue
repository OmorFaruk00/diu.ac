<template>

    <div class="container">
        <div class="abt-title mb-70 text-center">
            <h2>WELCOME TO OUR Certificate Verification</h2>
        </div>
    </div>

    <form action="">

        <!--        <a :href="route('about-us')" target="_blank">Test url</a>-->

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="roll">Roll</label>
                <input type="number" class="form-control" placeholder="Enter roll" required>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="session">Session</label>
                <input type="text" class="form-control" placeholder="Enter session">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="session">Reg Code</label>
                <input type="text" class="form-control" placeholder="Enter reg code">
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="passingYear">Passing Year</label>
                <select name="passingYear" id="passingYear" class="form-control">
                    <option value="1">1</option>
                    <option value="1">2</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <button type="submit" class="btn btn-info">Search</button>
        </div>
    </form>


    <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3 mt-4">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 140px;">Name</th>
                            <td>test</td>
                        </tr>

                        <tr>
                            <th>Roll</th>
                            <td>test</td>
                        </tr>


                        <tr>
                            <th>Program</th>
                            <td>test</td>
                        </tr>

                        <tr>
                            <th>Batch</th>
                            <td>test</td>
                        </tr>

                        <tr>
                            <th>Session</th>
                            <td>test</td>
                        </tr>

                        <tr>
                            <th>CGPA/Class</th>
                            <td>test</td>
                        </tr>

                        <tr>
                            <th>Passing Year</th>
                            <td>test</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>


</template>

<script>
export default {
    name: "index"
}
</script>

<style scoped>

</style>
