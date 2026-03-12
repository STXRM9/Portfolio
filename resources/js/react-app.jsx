import React from 'react';
import { createRoot } from 'react-dom/client';
import App from './components/App';

// Mount React app to the DOM element with id 'react-root'
const container = document.getElementById('react-root');

if (container) {
    const root = createRoot(container);
    root.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}
