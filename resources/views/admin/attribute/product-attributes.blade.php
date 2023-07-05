<h3>Attributes</h3>

<div>
    @foreach($attributes as $index => $attribute)
        <div class="form-group">
            <label>Select {{ $attribute->title }}</label>
            <select class="form-control select2" name="attributes[{{ $attribute->id }}][]" id="product-category" multiple>
                @foreach($attribute->values as $attributeValue)
                    <option value="{{$attributeValue->id}}" @selected(in_array($attributeValue->id, $selectedAttributeValues))>{{$attributeValue->title}}</option>
                @endforeach
            </select>
        </div>
    @endforeach
</div>
