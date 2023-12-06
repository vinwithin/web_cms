<div>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    {{-- The whole world belongs to you. --}}
    <div class="container w-100 ">
        
       
        <form wire:submit.prevent="save">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" wire:model="title">
            </div>
            <div class="mb-3">
                <textarea  id="" cols="172" rows="5" wire:model="description">Description</textarea>
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" id="file" wire:model="photo">
                <div wire:loading wire:target="photo">Uploading...</div>
            </div>
            
            <button  class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
