# Project: Curated LEGO Inventory Database

## Tools Used
MySQL · PHP · JavaScript · HTML · CSS · MAMP

---

## Overview
This project builds a **relational LEGO inventory database** from the [Kaggle LEGO Dataset](https://www.kaggle.com/rtatman/lego-database), hosted locally with **MAMP (MySQL + PHP)** and accessed through a custom PHP/HTML/JavaScript front-end.  

**Goals:**  
- Practice database design and SQL querying on a real-world dataset  
- Explore relational connectivity between LEGO sets, themes, and parts  
- Build a lightweight web interface to query and navigate results  

---

## Key Features
- Relational schema connecting **Sets → Themes → Parts**  
- Sortable tables and dropdown menus for navigation  
- Data cleaning to ensure accurate imports (header cleanup, secure_file_priv config)  
- Local hosting through **MAMP**, accessible via PHP/HTML/JS front-end  
- CLI imports to handle larger CSVs beyond phpMyAdmin’s 8MB upload limit  

---

## Technical Highlights
- **Database Design:** Created relational schema for LEGO sets, themes, colors, and inventories  
- **ETL Process:** Cleaned and imported CSVs via MySQL CLI, bypassing phpMyAdmin size limits  
- **Configuration:** Modified php.ini for larger uploads and updated secure_file_priv for safe imports  
- **Front-End Integration:** Built a simple PHP/HTML/JS interface to view and navigate relational data  

---

## Screenshots
### Multiple pages
<p><img align="left" src="https://raw.githubusercontent.com/jbrdge/PHP/master/PHP-001.png" width="45%"></p>
<p><img align="left" src="https://raw.githubusercontent.com/jbrdge/PHP/master/PHP-002.png" width="45%"></p>

### Dropdown menus
<p><img align="left" src="https://raw.githubusercontent.com/jbrdge/PHP/master/actions.png" width="45%"></p>
<br clear="both"/>

### Database Schema
<p><img src="https://github.com/jbrdge/PHP/blob/master/Lego%20SQL%20DATABASE/LegoDatabase/1599/downloads_schema.png" width="100%"></p>

---

## Key Takeaways
- Hands-on practice with relational schema design and SQL queries  
- Learned to troubleshoot MySQL import restrictions (`secure_file_priv`, upload limits)  
- Built confidence integrating a backend database with a PHP/HTML/JS front-end  
- Demonstrated ability to clean real-world datasets and explore relational queries  
