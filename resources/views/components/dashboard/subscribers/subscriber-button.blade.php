@auth
@if (Auth::user()->subscriptions->where('id', $newsletter->id)->isNotEmpty())
<form method="POST" action="{{route('dashboard.subscriptions.destroy')}}">
  @csrf
  @method('DELETE')
  <input type="hidden" name="newsletter_id" value="{{$newsletter->id}}">
  <sl-button variant="danger" outline type="submit" class="w-32" size="small">
    <sl-icon slot="prefix" name="dash-circle"></sl-icon>
    Remove
  </sl-button>
</form>

@else
<form method="POST" action="{{route('dashboard.subscriptions.store')}}">
  @csrf
  <input type="hidden" name="newsletter_id" value="{{$newsletter->id}}">
  <sl-button variant="success" type="submit" class="w-32" size="small">
    <sl-icon slot="prefix" name="bookmark"></sl-icon>
    Subscribe
  </sl-button>
</form>
@endif
@endauth