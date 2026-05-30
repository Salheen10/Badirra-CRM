import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import path from 'path';

export default defineConfig({
  plugins: [react()],
  build: {
    outDir: 'custom/themes/SuiteP/dist',
    emptyOutDir: true,
    manifest: false, // We don't need a manifest if we hardcode the output names
    rollupOptions: {
      input: path.resolve(__dirname, 'src/main.jsx'),
      output: {
        entryFileNames: 'assets/main.js',
        assetFileNames: 'assets/[name].[ext]',
      },
    },
  },
});
