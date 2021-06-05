<template>
    <form action="">
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
</template>

<script>
export default {
    name: "index"
}
</script>

<style scoped>

</style>
