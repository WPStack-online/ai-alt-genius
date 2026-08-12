# AI ALT Genius (WordPress Alt Text Automation)

[![WordPress Plugin](https://img.shields.io/badge/WordPress-6.0%2B-blue.svg)](https://wpstack.online/plugins/)
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-777BB4.svg)](https://wpstack.online/)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-green.svg)](https://www.gnu.org/licenses/gpl-3.0.html)
[![WPStack Studio](https://img.shields.io/badge/Developed%20By-WPStack.online-FD3A25.svg)](https://wpstack.online/custom-plugin-development/)

AI ALT Genius generates contextual, accessibility-focused image alt text descriptions across your WordPress Media Library using computer vision models.

> ⚡ **Need Custom WordPress Plugin Development or AI Integrations?**  
> WPStack builds custom AI plugins, OpenAI/Anthropic API integrations, vector search systems, and custom WooCommerce extensions.  
> 👉 **[Request a Custom Plugin Estimate at WPStack.online](https://wpstack.online/custom-plugin-development/)**

---

## 🌟 Key Features

* **Computer Vision Analysis**: Analyzes media library images to generate precise, human-readable alt descriptions.
* **Bulk Alt Text Generation**: Process missing image Alt tags across large WordPress media archives in batches.
* **Accessibility Compliance (WCAG 2.1)**: Formats alt text specifically for screen readers and accessibility guidelines.
* **Built for Human Review**: One-click preview and editing before committing alt text changes to the database.
* **Zero Layout Impact**: Preserves image aspect ratios, EXIF metadata, and media database structures.

---

## 🚀 Installation

1. Clone this repository into your WordPress plugins directory:
   ```bash
   cd wp-content/plugins/
   git clone https://github.com/wpstack/ai-alt-genius.git
   ```
2. Activate **AI ALT Genius** in **WordPress Admin > Plugins**.
3. Configure your API credentials in **Media > AI ALT Genius**.

---

## 🛠️ Developer Hooks

```php
// Filter generated alt text draft before saving to attachment postmeta
add_filter('ai_alt_genius_generated_text', function($alt_text, $attachment_id) {
    return trim($alt_text) . ' - WPStack Visual';
}, 10, 2);
```

---

## 📖 Official Guides & Resources

* 📚 [AI Alt Text vs Manual Alt Text in WordPress Guide](https://wpstack.online/blog/ai-alt-text-vs-manual-alt-text-wordpress/)
* 📚 [Building a WordPress Plugin with the OpenAI API](https://wpstack.online/blog/wordpress-plugin-openai-api/)
* 🌐 [AI ALT Genius Official Plugin Page](https://wpstack.online/wpstack-plugin/ai-alt-genius/)

---

## 📜 License

Distributed under the **GNU General Public License v3.0**.  
Maintained with ❤️ by **[WPStack - Custom WordPress Plugin Development Studio](https://wpstack.online/)**.

---

## 🌐 Connect with WPStack

* 🌐 **Website**: [WPStack.online](https://wpstack.online/)
* 🕮 **Blog & Guides**: [WPStack Insights](https://wpstack.online/blog/)
* 𝕏 **X (Twitter)**: [@WPStackOnline](https://x.com/WPStackOnline)
* 💼 **LinkedIn**: [WPStack Company Page](https://www.linkedin.com/company/wpstack/)
* 📺 **YouTube**: [@WPStackOnline](https://www.youtube.com/@WPStackOnline)
* 📘 **Facebook**: [WPStack Facebook Page](https://www.facebook.com/wpstack/)
* 📸 **Instagram**: [@wpstackonline](https://www.instagram.com/wpstackonline/)
