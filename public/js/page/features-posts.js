"use strict";

$("[data-checkboxes]").each(function() {
  var me = $(this),
    group = me.data('checkboxes'),
    role = me.data('checkbox-role');

  me.change(function() {
    var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
      checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
      dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
      total = all.length,
      checked_length = checked.length;

    if(role == 'dad') {
      if(me.is(':checked')) {
        all.prop('checked', true);
      }else{
        all.prop('checked', false);
      }
    }else{
      if(checked_length >= total) {
        dad.prop('checked', true);
      }else{
        dad.prop('checked', false);
      }
    }
  });
});


document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const pwindicator = document.getElementById('pwindicator');

    passwordInput.addEventListener('input', function() {
        const password = passwordInput.value;
        const strength = calculatePasswordStrength(password);
        updatePasswordIndicator(strength);
    });

    function calculatePasswordStrength(password) {
        // Logika penilaian kekuatan password Anda di sini
        // Contoh: Hitung panjang password atau kriteria lainnya
        if (password.length >= 8) {
            return 'strong';
        } else if (password.length >= 5) {
            return 'medium';
        } else {
            return 'weak';
        }
    }

    function updatePasswordIndicator(strength) {
        const bar = pwindicator.querySelector('.bar');
        const label = pwindicator.querySelector('.label');

        if (strength === 'strong') {
            bar.style.backgroundColor = 'green';
            label.textContent = 'Strong';
        } else if (strength === 'medium') {
            bar.style.backgroundColor = 'orange';
            label.textContent = 'Medium';
        } else {
            bar.style.backgroundColor = 'red';
            label.textContent = 'Weak';
        }
    }
});

$(document).ready(function(){
    get_EditUser();
})


function get_EditUser(){
    $(document).on('click','#btn_edit',function(){
        var ID =$(this).attr('data-id');
        console.log(ID);
    })
}
