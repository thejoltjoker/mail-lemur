<tr class="bg-white border-b border-stone-300 hover:bg-stone-50 transition">
  <td class="py-4 ps-4">
    <a class="text-base font-bold transition-all">
      {{$newsletter->title}}
    </a>
    <p class="text-stone-500">
      {{$newsletter->tagline}}
    </p>
  </td>
  <td>
    <p>
      {{$newsletter->author()->first()->name}}
      @if (Auth::id() == $newsletter->user_id)
      <sl-badge variant="neutral" pill>You</sl-badge>
      @endif
    </p>
  </td>
  <td>{{$newsletter->subscriptions->count()}}</td>
  <td class="w-1 whitespace-nowrap pe-4">
    <div class="flex gap-2">
      <sl-button variant="primary" size="small" outline href="{{route('dashboard.newsletters.show', $newsletter->id)}}">
        <sl-icon slot="prefix" name="eye"></sl-icon>
        View
      </sl-button>
      <x-dashboard.subscribe-button :newsletter="$newsletter" />
    </div>
  </td>
</tr>