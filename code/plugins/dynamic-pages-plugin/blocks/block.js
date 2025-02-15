const { registerBlockType } = wp.blocks;
const { RichText } = wp.blockEditor;

registerBlockType('dynamic-pages/cta-block', {
    title: 'CTA Block',
    icon: 'megaphone',
    category: 'common',
    attributes: {
        content: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
    },
    edit({ attributes, setAttributes }) {
        const { content } = attributes;
        return (
            <RichText
                tagName="p"
                value={content}
                onChange={(newContent) => setAttributes({ content: newContent })}
                placeholder="Enter CTA text here..."
            />
        );
    },
    save({ attributes }) {
        const { content } = attributes;
        return <RichText.Content tagName="p" value={content} />;
    },
});
