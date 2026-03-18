import os
import glob

directory = r"e:\noor\rank\website\revamp"

# Find all HTML and CSS files
files = glob.glob(os.path.join(directory, "*.html")) + glob.glob(os.path.join(directory, "*.css"))

for filepath in files:
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    # Perform replacements
    new_content = content.replace("Techmagnate", "Rankmator")
    new_content = new_content.replace("techmagnate", "rankmator")
    new_content = new_content.replace("TECHMAGNATE", "RANKMATOR")
    new_content = new_content.replace("TECH<span>MAGNATE</span>", "RANK<span>MATOR</span>")
    new_content = new_content.replace("Tech<span>magnate</span>", "Rank<span>mator</span>")
    
    # Also handle accidental "techmagnet" or "Techmagnet"
    new_content = new_content.replace("Techmagnet", "Rankmator")
    new_content = new_content.replace("techmagnet", "rankmator")
    new_content = new_content.replace("TECHMAGNET", "RANKMATOR")

    if content != new_content:
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(new_content)
        print(f"Updated {os.path.basename(filepath)}")

print("Done!")
