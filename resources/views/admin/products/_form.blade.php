<div class="form-group">
    <label for="name">Product Name</label>
    <input
        type="text"
        class="form-control  @error('name') is-invalid @enderror"
        id="name"
        name="name"
        autocomplete="name"
        required
        value="{{ old('name', $product->name) }}"
        aria-describedby="nameHelp">
    <small id="nameHelp" class="form-text text-muted">Simple name</small>
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="name">Image Product</label>
    <div class="custom-file">
        <input
            type="file"
            class="custom-file-input"
            id="image"
            name="image">
        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
    </div>
</div>
<div class="form-group">
    <label for="description">Short Description</label>
    <textarea
        class="form-control"
        id="description"
        name="description"
        aria-describedby="descriptionHelp"
        class="form-control  @error('description') is-invalid @enderror"
        rows="2">{{ old('description', $product->description) }}</textarea>
    <small id="descriptionHelp" class="form-text text-muted">Short description.</small>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input
        type="number"
        class="form-control  @error('price') is-invalid @enderror"
        id="price"
        name="price"
        step="0.01"
        autocomplete="price"
        required
        value="{{ old('price', $product->price) }}"
        aria-describedby="priceHelp">
    <small id="priceHelp" class="form-text text-muted">Price of the product.</small>
    @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="long_description">Long Description</label>
    <textarea
        class="form-control"
        id="long_description"
        name="long_description"
        aria-describedby="long_descriptionHelp"
        class="form-control  @error('long_description') is-invalid @enderror"
        rows="4">{{ old('long_description', $product->long_description) }}</textarea>
    <small id="long_descriptionHelp" class="form-text text-muted">Long description of the product.</small>
    @error('long_description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
