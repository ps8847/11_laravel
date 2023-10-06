<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="" aria-describedby="helpId" placeholder="" >
    {{$demo}}
    <small id="helpId" class="form-text text-muted"> @error('name') {{$message}} @enderror</small>
  </div>