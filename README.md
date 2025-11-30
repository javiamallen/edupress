# ⚙️ Feature: API Integration and Back End Optimization

This branch focuses on building the core logic and data integration layer for the EduPress Pro application, adhering strictly to WordPress security standards and PHP best practices.

---

## 🛠️ Work Completed in This Branch (Back End Focus)

| Feature | Description | Technical Implementation |
| :--- | :--- | :--- |
| **API Consumption** | Implemented the necessary logic to consume and process data from an external REST API for integration into the Front End. | **PHP:** Used `wp_remote_get()`—the secure, native WordPress function—to handle the external HTTP request. |
| **Data Processing** | The received JSON data is decoded and parsed to extract specific fields (name, website) required for the application. | **PHP:** Implemented `json_decode` to convert JSON strings into usable PHP arrays. |
| **Plugin Core Development** | All Back End logic, including the API call and data handling, is contained within the **`edu-press-core.php` plugin**. | **Architecture:** Separation of concerns ensured by isolating PHP functionality from the theme layer. |
| **Data Visualization Hook** | Created a native WordPress element to display the data. | **WordPress:** Developed the `[lista_api_estudiantes]` shortcode to render the API results in the front end. |
| **Service Used** | Proof of concept using a simulated data service. | **Tool:** JSONPlaceholder (public, free, fictional REST API). |

---

## 🌳 Workflow Status

* **Ready for Merge:** This core Back End functionality has been successfully tested locally and is ready to be merged into the `develop` branch.


---
**Developer:** [Javiam Allen ♥ ](https://www.linkedin.com/in/javierallend1/)
**GitHub User:** Javiamallen
**Local Demo URL:** `edupress.local`

## 🚀 App Working here


## 🖼️ Interface

![EduPress Pro Screenshot - Corporate Interface](image.png)
<br>
<br>
