              {{-- title --}}
         <div class="form-group ">
                <label>Nom</label>
              <input type="text" class="form-control"  id="title" name="title" value="{{ old('title') ?? $event->title}}">
                {!!$errors->first('title',' <small id="title" class="form-text text-danger">:message</small>')!!}
         </div>
                {{-- description --}}
         <div class="form-group">
                  <label>Votre description</label>
                  <textarea class="form-control"  rows="3" id="description" name="description">{{ old('title') ?? $event->description}}</textarea>
                  {!!$errors->first('description',' <small id="description" class="form-text text-danger">:message</small>')!!}
        </div>

    <button type="submit" class="btn btn-primary btn-block ">{{$submitButtonText}}</button>