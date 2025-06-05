# SimpleTime

A lightweight PocketMine-MP plugin that adds simple and shortened time control commands: `/day` and `/night`.

## 🌟 Features

- Set the default world time to **day** or **night**
- Supports command aliases:
  - `/day` → also available as `/dia`
  - `/night` → also available as `/noche`
- Permission-based access
- Clean and minimal implementation using PocketMine API 5

## 💻 Commands

| Command    | Aliases | Description            | Permission         |
|------------|---------|------------------------|---------------------|
| `/day`     | `/dia`  | Sets time to **day**   | `simpletime.day`    |
| `/night`   | `/noche`| Sets time to **night** | `simpletime.night`  |

## 🔐 Permissions

```yaml
simpletime.day:
  description: Allows using /day and /dia
  default: op

simpletime.night:
  description: Allows using /night and /noche
  default: op
