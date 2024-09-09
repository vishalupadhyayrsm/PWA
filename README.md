# Progressive Web App (PWA)

## Offline Image Capture and Upload

This is a Progressive Web Application (PWA) that allows users to install it on their phones as an application. The app provides functionality to take a picture and upload it to the server, even when the user is offline. The image is stored locally in the browser using the IndexedDB API, and once the user regains internet connectivity, the app automatically uploads the image to the server.

## Features

- **Offline Functionality**: The app can be installed on any device (mobile, desktop) and works offline.
- **Camera Access**: Users can take pictures using their device's camera.
- **Offline Storage**: Images are stored in the browser using IndexedDB when the app is offline.
- **Automatic Upload**: Once the user is connected to the internet, the images are automatically uploaded to the server.
- **PWA Capabilities**: The app can be installed on a device just like a native app.

## Prerequisites

- A server endpoint for image uploads using PHP.
- A modern browser with PWA support.
- A manifest file and service worker for PWA functionalities.

## How It Works

1. **Install the App**: The app can be installed on any mobile or desktop device by visiting the web page and clicking the "Add to Home Screen" prompt.
2. **Capture Image**: Users can capture images using their device's camera.
3. **Store Image Locally**: When the user is offline, the image is stored locally in IndexedDB.
4. **Sync Data**: The service worker detects when the user comes online and uploads the stored images to the server.

## Getting Started

### Install Dependencies

To install and run the application, first clone the repository and install the required packages.

```bash
git clone git@github.com:vishalupadhyayrsm/PWA.git
cd PWA
npm install
```

### Language Required

1. HTML CSS For Frontend.
2. JavaScript.
3. PHP for handling the server side to store the data in the database.
4. Learn how to create a manifest file [Click here](https://developer.mozilla.org/en-US/docs/Mozilla/Add-ons/WebExtensions/manifest.json) (open in a new tab).

### Author

Vishal Kumar Upadhyay

### Key Points:

- **PWA**: App is installable and works offline.
- **Service Worker**: Caches the required assets and handles background sync.
- **IndexedDB**: Stores images offline until an internet connection is available.
- **Background Sync**: Once online, the service worker automatically uploads images to the server.

This README outlines the steps and requirements to get your PWA running, including offline functionality and automatic syncing when the connection is restored.
