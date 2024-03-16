function TextWrapper({ data, header }) {
    return (
        <>
            <h4 className="px-4 mb-2 font-semibold">{header}</h4>
            <div dangerouslySetInnerHTML={{ __html: data }} className="px-4 my-2 text-lg"></div>
        </>
    );
}

export default TextWrapper;
