import './bootstrap';
import Alpine from 'alpinejs'
import Typed from 'typed.js';
import 'flowbite';

window.Alpine = Alpine
 
Alpine.start()

const options = {
  strings: ["Vitademy.", "ヴィタデミー.", "비타데미."],
  typeSpeed: 60,
  backSpeed: 40,
  loop: true,
};

const typed = new Typed('#typed-output', options);

AOS.init();
 