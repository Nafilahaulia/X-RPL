import React from 'react';
import { motion } from 'framer-motion';

export default function About() {
  return (
    <section id="about" className="py-20 px-8 md:px-24 relative z-10">
      <div className="max-w-4xl mx-auto glass rounded-3xl p-8 md:p-12 shadow-xl animate-float-slow" style={{ animationDelay: '1.5s' }}>
        <h2 className="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-6">Tentang Saya</h2>
        <p className="text-gray-600 text-lg leading-relaxed text-center mb-6">
          Saya memadukan kreativitas dan kode untuk membangun ekosistem digital. Spesialisasi saya meliputi pengembangan web end-to-end menggunakan Laravel dan React, dengan dedikasi untuk menciptakan produk yang inovatif serta relevan dengan kebutuhan pasar saat ini.
        </p>
        <div className="flex justify-center gap-6">
          <div className="text-center">
            <h3 className="text-4xl font-bold text-purple-500">2+</h3>
            <p className="text-gray-500 font-medium">Tahun Pengalaman</p>
          </div>
          <div className="text-center">
            <h3 className="text-4xl font-bold text-blue-400">17+</h3>
            <p className="text-gray-500 font-medium">Proyek Selesai</p>
          </div>
        </div>
      </div>
    </section>
  );
}
