import xml.etree.ElementTree as ET

tree = ET.parse('mytask_unpacked/word/document.xml')
root = tree.getroot()

ns = {'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main'}

text_parts = []
for t in root.findall('.//w:t', ns):
    if t.text:
        text_parts.append(t.text)

full_text = ''.join(text_parts)
print(full_text)
