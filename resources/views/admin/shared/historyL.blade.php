@if(!$historyL->isEmpty())
    <table class="table">
        <thead>
        <tr>
            <td>productID</td>
            <td>total</td>
            <td>activity</td>
            <td>activityID</td>
            <td>Created at</td>
        </tr>
        </thead>
        <tbody>
        @foreach ($historyL as $product)
            <tr>
                <td>{{ $product->productID }}</td>
                <td> {{ $product->total }}</td>
                <td>{{ $product->activity }}</td>
                <td>{{$product->activityID}}</td>
                <td>{{$product->created_at}}</td>
                <!-- <td>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <div class="btn-group">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                        </div>
                    </form>
                </td> -->
            </tr>
        @endforeach
        </tbody>
    </table>
@endif