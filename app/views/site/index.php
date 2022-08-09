<div class="jumbotron">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad aliquam architecto aspernatur aut blanditiis
    commodi corporis cupiditate distinctio dolor ducimus ex, facilis harum impedit ipsa, iusto laborum molestiae non
    nostrum obcaecati possimus quia quidem reiciendis repudiandae sequi ullam ut vero? Commodi corporis ipsam maxime
    natus nemo placeat praesentium veritatis?
    <div class="form-group">
        <label for=""></label>
        <textarea class="form-control" name="" id="" rows="3"></textarea>
    </div>
    <button class="btn btn-success">push me</button>
</div>

<script>
    $(document).ready(function ($) {
        $('.btn').on('click', e => {
            $.post('/site/test', {}, response => {
                console.log(JSON.parse(response));
            })
        })
    })
</script>
