<div class="form-floating mb-3">
              <input
              value="@isset($student->name){{ $student->name }}@endisset"
                type="text"
                class="form-control" name="name" id="name" placeholder="Votre nom complet :">
              <label for="name">Votre nom complet :</label>
            </div>
            <div class="form-floating mb-3">
              <input
              value="@isset($student->address){{ $student->address }}@endisset"
                type="text"
                class="form-control" name="address" id="address" placeholder="Votre address :">
              <label for="address">Votre address :</label>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Votre Image :</label>
              <input
              value="@isset($student->image){{ $student->image }}@endisset"
                type="file"
                class="form-control" name="image" id="image">
            </div>
            <div class="form-floating mb-3">
              <input
              value="@isset($student->phone){{ $student->phone }}@endisset"
                type="tel"
                class="form-control" name="phone" id="phone" placeholder="Votre numero de telephone :">
              <label for="phone">Votre numero de telephone :</label>
            </div>
            <div class="form-floating mb-3">
              <input
              value="@isset($student->phone){{ $student->phone }}@endisset"
                type="email"
                class="form-control" name="email" id="email"  placeholder="Votre address email :">
              <label for="email">Votre address email :</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Votre biographie :" name="bio" id="bio">
                @isset($student->name){{ $student->name }}@endisset  
                </textarea>    
                <label for="bio">Votre biographie :</label>
            </div>
            <div class="form-check mb-3">
              <input
                type="checkbox"
                value="@isset($student->phone){{ $student->phone }}@endisset"
                class="form-check-input" value="1" name="status" checked id="status">
              <label for="status">Status de l'etudiant :</label>
            </div>