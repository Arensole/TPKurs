<div>
<div class="card">
    <div class="card-header">Продукты <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Добавить</button></div>
    <div class="card-body">
        <table class="table table-striped">
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td><input type="button" value="Удалить" wire:click="delete({{$product->id}})"></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить продукт</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" wire:model="name">
                <input type="text" wire:model="category">
                <input type="number" wire:model="price">
                <input type="number" wire:model="quantity">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="create">Create</button>
            </div>
        </div>
    </div>
</div>
</div>
