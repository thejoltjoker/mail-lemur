<x-layout>
  <div class="flex justify-center items-center h-[calc(100vh-6rem)]">
    <form method="POST" action="/users">
      @csrf
      <sl-card class="card-header">
        <div slot="header" class="font-bold text-center">
          Sign up
        </div>
        <div class="flex flex-col gap-4">
          <sl-input placeholder="John Doe" label="Name" name="name" value="{{old('name')}}"></sl-input>
          @error('name')
          <p class="text-red-500 text-xs -mt-1">
            {{$message}}
          </p>
          @enderror

          <sl-input placeholder="john.doe@example.com" label="Email" name="email" value="{{old('email')}}"></sl-input>
          @error('email')
          <p class="text-red-500 text-xs -mt-1">
            {{$message}}
          </p>
          @enderror

          <sl-input type="password" placeholder="••••••••••••" password-toggle label="Password" name="password">
          </sl-input>
          @error('password')
          <p class="text-red-500 text-xs -mt-1">
            {{$message}}
          </p>
          @enderror

          {{-- <sl-radio-group label="Select an option" name="role" value="subscriber">
            <sl-radio-button value="subscriber">Subscriber</sl-radio-button>
            <sl-radio-button value="customer">Customer</sl-radio-button>
          </sl-radio-group> --}}
          <div>
            <p>Roles</p>
            <ul>
              @foreach ($roles as $role)
              <li>
                <sl-checkbox @if($role->name === 'subscriber') checked @endif
                  name="role-{{$role->name}}">{{ucfirst($role->name)}}
                </sl-checkbox>
              </li>
              @endforeach
            </ul>
          </div>

          <sl-divider style="--width: 4px; --color: tomato;"></sl-divider>




          <p class="text-sm">Already have an account? <a href="/login" class="text-[--sl-color-primary-500]">Log in</a>
          </p>
        </div>
        <div slot="footer">
          <sl-button variant="primary" type="submit" class="w-full">Sign up</sl-button>
        </div>
      </sl-card>
    </form>
  </div>
</x-layout>