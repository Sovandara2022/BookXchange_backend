@extends('layout.master')

@section('dyncontent')

<title>Edit Page</title>
<body>
    <div class="background-image"></div>
    <header>
      <h1>Book Xchange</h1>
    </header>

    <section>
      <h1>Edit Profile</h1>
      <form id="edit-form">
        <div class="form-group">
          <label for="edit-name">User Name:</label>
          <input type="text" id="edit-name" name="edit-name" required />
          <div class="error-message" id="name-error"></div>
        </div>
        <div class="form-group">
          <label for="edit-age">User Age:</label>
          <input type="number" id="edit-age" name="edit-age" required />
          <div class="error-message" id="age-error"></div>
        </div>
        <div class="form-group">
          <label for="edit-address">User Address:</label>
          <input type="text" id="edit-address" name="edit-address" required />
          <div class="error-message" id="address-error"></div>
        </div>
        <div class="form-group">
          <label for="edit-email">User Email:</label>
          <input type="email" id="edit-email" name="edit-email" required />
          <div class="error-message" id="email-error"></div>
        </div>

        <div class="form-group">
          <label for="user_password">User Password:</label>
          <input
            type="password"
            id="user_password"
            name="user_password"
            required
          />
        </div>

        <div class="form-group">
          <label for="edit-phone">Phone Number:</label>
          <input type="tel" id="edit-phone" name="edit-phone" required />
          <div class="error-message" id="phone-error"></div>
        </div>

        <div>
          <label for="user_gender">User Gender:</label>
          <select id="user_gender" name="user_gender" required>
            <option value="">-- Select --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div>
          <label for="user_province">User Province:</label>
          <select id="user_province" name="user_province" required>
            <option value="">-- Select --</option>
            <option value="Banteay Meanchey">Banteay Meanchey</option>
            <option value="Battambang">Battambang</option>
            <option value="Kampong Cham">Kampong Cham</option>
            <option value="Kampong Chhnang">Kampong Chhnang</option>
            <option value="Kampong Speu">Kampong Speu</option>
            <option value=" Kampong Thom">Kampong Thom</option>
            <option value="Kampot">Kampot</option>
            <option value="Kandal ">Kandal</option>
            <option value="Kep">Kep</option>
            <option value="Koh Kong">Koh Kong</option>
            <option value="Kratié">Kratié</option>
            <option value="Mondulkiri">Mondulkiri</option>
            <option value="Oddar Meanchey ">Oddar Meanchey</option>
            <option value="Pailin ">Pailin</option>
            <option value=" Phnom Penh Capital">Phnom Penh Capital</option>
            <option value="Preah Vihear">Preah Vihear</option>
            <option value="Pursat">Pursat</option>
            <option value=" Prey Veng">Prey Veng</option>
            <option value=" Ratanakiri">Ratanakiri</option>
            <option value=" Siem Reap ">Siem Reap</option>
            <option value="Preah Sihanouk">Preah Sihanouk</option>
            <option value="Stueng Treng">Stueng Treng</option>
            <option value="Svay Rieng ">Svay Rieng</option>
            <option value="Takéo">Takéo</option>
            <option value="Tboung Khmum">Tboung Khmum</option>
          </select>
        </div>

        <button type="button" class="button">update Profile</button>
        {{-- <a href="{{ url('/success') }}">
            <button type="button" class="button">update Profile</button>
        </a> --}}

        <button type="button" class="button">Delete Profile</button>
        {{-- <a href="{{ url('/success') }}">
            <button type="button" class="button">Delete Profile</button>
        </a> --}}
      </form>
    </section>
  </body>