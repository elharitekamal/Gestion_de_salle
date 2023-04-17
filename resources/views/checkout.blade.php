<div>
    <form action="/session" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button type="submit">Checkout</button>

    </form>
</div>